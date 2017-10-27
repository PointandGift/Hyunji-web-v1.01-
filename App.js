import React from 'react';
import { StyleSheet, View, Image, Text, TextInput, TouchableOpacity } from 'react-native';

export default class App extends React.Component {
  render() {
    return (
        
        
        <View style={styles.container}>
            <View style={styles.gradientContainer}>
                <Image style={styles.gradient} source={require('./images/gradient.png')}
                />
            </View>
                
                
            <View style={styles.logoContainer}>
                <Image style={styles.logo} source={require('./images/logo.png')}
                />
            </View>
                
                                                   
            <View style={styles.formContainer}>
            </View>
            
                
            <View style={styles.container}>
                <TextInput style={styles.input} 
                    placeholder = "         Username"
                    placeholderTextColor = "#FFFFFF"
                />
                        
                <TextInput style={styles.input}
                    placeholder = "         Password"
                    placeholderTextColor = "#FFFFFF"
                />
                        
                <Image style={styles.password} source={require('./images/password.png')}
                />     
                                                        
                <TouchableOpacity style={styles.buttonContainer}>
                    <Text style={styles.buttonText}>
                        Login
                    </Text>
                </TouchableOpacity>
                    
                <Image style={styles.username} source={require('./images/username.png')}
                />
                                                       
                <Text style={styles.createAccount}>
                    Don't have an account? <Text style={styles.signup}>Sign up</Text>
                </Text>
                
                <Text style={styles.textOr}> 
                    ────────  OR  ────────
                </Text>
                
                <Image style={styles.facebook} source={require('./images/facebook.png')}
                />
                                                       
                <Image style={styles.google} source={require('./images/google.png')}
                />
            </View>
        </View>
    );
  }
}


const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    logoContainer: {
        alignItems: 'center',
        marginTop: -380,
        marginBottom: 60
    },
    gradientContainer: {
        flex: 1,
        alignSelf: 'center',
        justifyContent: 'center',
        marginTop: 410
    },
    container: {
        padding: 20,
    },
    input: {
        height: 40,
        marginBottom: 20,
        borderWidth: 2,
        borderTopColor: 'transparent',
        borderRightColor: 'transparent',
        borderBottomColor: '#FFFFFF',
        borderLeftColor: 'transparent'
    },
    username: {
        marginTop: -200
    },
    password: {
        marginTop: -50
    },
    buttonContainer: {
        marginTop: 60,
        paddingVertical: 20,
        backgroundColor: '#FFFFFF',
        borderRadius: 18
    },
    buttonText: {
        textAlign: 'center',
        color: '#d1175b',
        fontSize: 20,
        fontWeight: 'bold'
    },
    createAccount: {
        marginTop: 320,
        textAlign: 'center',
        color: '#FFFFFF',
        fontSize: 16,
        backgroundColor: 'transparent'
    },
    signup: {
        fontWeight: 'bold'
    },
    textOr: {
        width: 301,
        marginTop: -130,
        textAlign: 'center',
        color: '#FFFFFF',
        fontSize: 16,
        backgroundColor: 'transparent'
    },
    facebook: {
        marginTop: 20,
        marginLeft: 95
    },
    google: {
        marginTop: -45,
        marginLeft: 165
    }
});